FROM node:11.15.0-alpine
RUN npm install -g tiddlywiki
VOLUME /tiddlywiki
WORKDIR /tiddlywiki
EXPOSE 8080

ENV TW_WIKINAME mywiki
ENV TW_USERNAME "tiddly"
ENV TW_PASSWORD "tiddly"
ENV TW_HOST 0.0.0.0
ENV TW_PORT 8080
ENV TW_READERS "(authenticated)"
ENV TW_WRITERS "(authenticated)"

ADD init-and-run /usr/local/bin/init-and-run
ENTRYPOINT ["/bin/sh","/usr/local/bin/init-and-run"]