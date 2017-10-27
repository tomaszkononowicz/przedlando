#!/bin/sh
docker exec be-mysql mysqldump -u root --password=pussyeater mysql > backup.sql
git add .
git status
