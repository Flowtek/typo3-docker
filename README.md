# typo3-docker
## boostrap demo

Just run `docker-compose up` and TYPO3 will run with installed bootstrap package.

Open `http://localhost/` for the frontend and `http://localhost/typo3/` (_admin_ | _yoursupersecretpassword_) for the backend.

If you are using Docker Machine on Windows or MacOS you might need to use the _IP_ of your Docker VM.  
`docker-machine ip default` will return the _IP_.