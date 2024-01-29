#See https://aka.ms/customizecontainer to learn how to customize your debug container and how Visual Studio uses this Dockerfile to build your images for faster debugging.

FROM debian:latest

RUN apt update
RUN apt install ruby -y
RUN apt install ruby-dev -y
RUN apt install rubygems -y
RUN apt install build-essential -y
RUN gem install jekyll bundler
RUN jekyll new app
WORKDIR ./app
#COPY ["./M3Prog_backend/","./app"]
RUN bundle 
#exec jekyll serve

#expose & run
EXPOSE 80
# zet de working dir op de app dir anders kan asp de wwwroot niet vinden

#CMD ["bundle exec jekyll serve"]
#CMD ["jekyll serve"]


