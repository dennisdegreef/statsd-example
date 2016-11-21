FROM ubuntu:16.04

RUN apt-get update && apt-get install -y apt-transport-https collectd

RUN echo "deb https://packagecloud.io/grafana/stable/debian/ jessie stable" > /etc/apt/sources.list.d/grafana.list

RUN apt-key adv --keyserver pgp.mit.edu --recv-keys 418A7F2FB0E1E6E7EABF6FE8C2E73424D59097AB
RUN apt-get update && apt-get install -y \
	grafana \
;

# For some reason grafana panics when called like this, perform a hack to make it work
#CMD [ "/usr/sbin/grafana", "--pidfile=/var/run/grafana.pid", "--config=/etc/grafana/grafana.ini", "cfg:default.paths.data=/var/lib/grafana", "cfg:default.paths.logs=/var/log/grafana"]

#CMD [ "/etc/init.d/grafana", "start", ";", "tail", "-f", "/var/log/grafana/grafana.log", "||", "/etc/init.d/grafana", "stop", "&&", "exit" ]
CMD [ "/etc/init.d/grafana", "start", "||", "tail", "-f", "/var/log/grafana/grafana.log" ]

