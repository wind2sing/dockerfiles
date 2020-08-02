FROM yourls:1.7.9
RUN apt-get update \
  && apt-get install -y --no-install-recommends wget unzip \
  && rm -rf /var/lib/apt/lists/* \
  && wget https://github.com/tomslominski/infinity-squared/archive/master.zip \
  && unzip master.zip \
  && rm master.zip \
  && mv infinity-squared-master/*.php ./ \
  && mv infinity-squared-master/public/ ./ \
  && rm -rf infinity-squared-master \
  && apt-get remove -y wget unzip
COPY plugins ./user/plugins/
