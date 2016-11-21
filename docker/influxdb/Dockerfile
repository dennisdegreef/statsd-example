FROM ubuntu:16.04

RUN apt-get update && apt-get install -y apt-transport-https collectd

RUN echo "deb https://repos.influxdata.com/debian jessie stable" > /etc/apt/sources.list.d/influxdb.list

RUN apt-key adv --keyserver pgp.mit.edu --recv-keys 05CE15085FC09D18E99EFB22684A14CF2582E0C5
RUN apt-get update && apt-get install -y \
	influxdb \
;

COPY influxdb.conf /etc/influxdb/influxdb.conf

CMD ["/usr/bin/influxd", "-config", "/etc/influxdb/influxdb.conf"]
