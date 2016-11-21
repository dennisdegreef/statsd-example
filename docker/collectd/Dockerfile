FROM alpine:latest

RUN apk update
RUN apk add collectd collectd-network bash
COPY collectd.conf /etc/collectd/collectd.conf

CMD ["/usr/sbin/collectd", "-C", "/etc/collectd/collectd.conf", "-f"]
