FROM mysql
ADD app/dump/chatting.sql /docker-entrypoint-initdb.d
