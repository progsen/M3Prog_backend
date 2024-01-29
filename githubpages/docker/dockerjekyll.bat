docker build -t  jjekyl .


echo docker run --name jjekyl -p 80:80 -p 443:443 -P -t -i jjekyl
echo docker run -p 4000:4000 jjekyl jekyll serve

set site_name=my-blog
docker run --rm --volume="%CD%:/srv/jekyll" -it jekyll/jekyll sh -c "chown -R jekyll /usr/gem/ && jekyll new %site_name%" && cd %site_name%

