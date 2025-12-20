#!/usr/bin/env bash
source .db_data.sh

REMOTE_SSH="${REMOTE_SSH_USER}@${REMOTE_SSH_HOST}"


DUMP_FILE="dump_$(date +%Y%m%d_%H%M%S).sql"

echo "Erstelle Dump-Datei ${DUMP_FILE}..."

ssh "${REMOTE_SSH}" "mysqldump \
  -u ${REMOTE_DB_USER} \
  -p'password' \
  --single-transaction \
  --quick \
  --lock-tables=false \
  --no-tablespaces \
  --ignore-table=${REMOTE_DB_NAME}.wp_kunstmueoptions \
  \"${REMOTE_DB_NAME}\"" > "${DUMP_FILE}"

echo "Importiere ${DUMP_FILE} in lokale DB ${LOCAL_DB_NAME}..."
mysql  -u"${LOCAL_DB_USER}" -p \
  "${LOCAL_DB_NAME}" < "${DUMP_FILE}"

echo "Fertig ✅"
echo "Removing Dumpfile"
rm ${DUMP_FILE}
