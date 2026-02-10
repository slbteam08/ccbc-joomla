# Docker Volume Migration - Option B Implementation

**Date:** February 10, 2026  
**Implementation:** Read-only code + Named volumes for uploads

## What Changed

### Before (Old Setup)
- Bind mount: `./:/var/www/html` (entire codebase writable)
- Plugin uploads mixed with git-tracked code
- Security risk: any code could be modified

### After (Option B - Current)
- Code baked into Docker image (immutable)
- Uploads go to named Docker volumes
- Clean separation: code vs. user data

---

## Deployment Workflow

### Development (Local Changes)
1. Edit code in git repo
2. Rebuild image: `docker compose build`
3. Restart: `docker compose up -d`

### Production Deployment
1. Commit code changes to git
2. Pull on server: `git pull`
3. Rebuild: `docker compose -f docker-compose.yml build`
4. Deploy: `docker compose -f docker-compose.yml up -d`

**Note:** Volumes persist across rebuilds! User uploads are safe.

---

## Volume Management

### Backup a volume
```bash
docker run --rm -v ccbc-joomla_joomla_plugins:/data -v $(pwd):/backup alpine tar czf /backup/plugins-backup.tar.gz /data
```

### Extract plugin from volume to git (if needed)
```bash
docker cp ccbc-joomla-joomla-1:/var/www/html/plugins/system/myplugin ./plugins/system/myplugin
git add plugins/system/myplugin
git commit -m "Add myplugin to repo"
```

---

**Status:** ✅ Production-ready
