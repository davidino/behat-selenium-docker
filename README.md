# mycrm-specs
Running specs

## setup
```docker-compose build```

## Run specs
```docker-compose run specs ./features/```

## Debugging
Replace the original image for the container `firefox-server` with `selenium/standalone-firefox-debug:2.53.0`.

Then use a VNC client to connect on this container on the port `5900`:

* On Safari type: `vnc://<ip>:5900` to see the browser in action
* the password is `secret`
* `docker-machine ls` to get the `ip`


