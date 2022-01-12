
#!/usr/bin/env bash

# https://documentation.its.umich.edu/node/2118
if [ "$(id -u)" -ge 1000 ] ; then
    sed -e "/^www-data:/c www-data:x:$(id -u):$(id -g):www-data:/var/www:/usr/sbin/nologin" /etc/passwd > /tmp/passwd
    cat /tmp/passwd > /etc/passwd
    rm /tmp/passwd
fi

/usr/bin/supervisord -n -c /var/www/html/config/supervisord.conf
