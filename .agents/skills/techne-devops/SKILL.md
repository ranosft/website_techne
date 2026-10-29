---
name: techne-devops
description: Activates whenever the user asks to deploy the Techne website, check remote server health, diagnose issues on the big server, inspect remote logs (Apache/Nginx/Laravel), manage remote services, or run deployment and sync tasks.
---

# Techne DevOps (Remote Server Diagnostics & Deployment)

This skill dictates how AI agents manage deployments, diagnose server issues, and inspect production environments for the Techne platform on remote infrastructure.

---

## 1. Remote Server Access Configuration

Remote server access is pre-configured via SSH in `~/.ssh/config`:

* **Primary SSH Host:** `big`
  * HostName: `66.116.199.97`
  * Default User: `ranjeet`
  * Key: `~/.ssh/web`
* **Root / Sudo Alternative:** `big2`
  * User: `ubuntu`
  * Key: `~/.ssh/web`

All remote commands must be executed using the non-interactive SSH syntax via `run_command`:
```bash
ssh big "<command>"
```
For privileged commands requiring administrative permissions, use `big2` or `sudo`:
```bash
ssh big "sudo <command>"
# or
ssh big2 "<command>"
```

---

## 2. Server Diagnostics & Health Checks

When diagnosing issues or checking status on the server:

### A. System Resources & Uptime
```bash
ssh big "uptime && free -h && df -h"
```

### B. Inspect Remote Web Directories
```bash
ssh big "ls -la /var/www"
```

### C. Web Server Status & Logs
* **Check Service Status:**
  ```bash
  ssh big "sudo systemctl status apache2"   # for Apache
  ssh big "sudo systemctl status nginx"     # for Nginx
  ```
* **Inspect Web Server Error Logs:**
  ```bash
  ssh big "sudo tail -n 100 /var/log/apache2/error.log"
  # or
  ssh big "sudo tail -n 100 /var/log/nginx/error.log"
  ```

### D. Application Logs (Laravel / Node)
```bash
ssh big "tail -n 100 /var/www/<project-dir>/storage/logs/laravel.log"
```

---

## 3. Deployment & Synchronization Workflow

When deploying updates to the remote server:

1. **Verify Local State:**
   Ensure local changes are tested, committed, and pushed to the upstream Git repository.

2. **Pull Changes on Server:**
   ```bash
   ssh big "cd /var/www/<project-dir> && git pull origin main"
   ```

3. **Install Dependencies & Build Assets:**
   * If PHP/Composer:
     ```bash
     ssh big "cd /var/www/<project-dir> && composer install --no-dev --optimize-autoloader"
     ```
   * If Node / Frontend:
     ```bash
     ssh big "cd /var/www/<project-dir> && npm install && npm run build"
     ```

4. **Cache & Service Optimization:**
   * If Laravel:
     ```bash
     ssh big "cd /var/www/<project-dir> && php artisan config:cache && php artisan route:cache && php artisan view:cache"
     ```
   * Clear OPcache / Reload PHP-FPM if PHP files were modified:
     ```bash
     ssh big "sudo systemctl reload php*-fpm"
     ```

---

## 4. Safety & Operational Rules

* **Non-Destructive First:** Always inspect logs and perform dry-runs before restarting services or updating databases.
* **Confirm Destructive Commands:** Never run migrations that drop tables or wipe data without explicit confirmation from the user.
* **Verification:** After deploying, always verify HTTP status code and response header using `curl -I <URL>` to ensure the site responds with `200 OK`.
