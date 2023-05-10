FROM nginx:mainline-alpine

COPY ./config/nginx_config.conf /etc/nginx/conf.d/default.conf

CMD ["nginx", "-g", "daemon off;"]