## Nex
A simple HTTP server in python using socket programming

### Instructions
- `settings.conf` file contains all the settings related to the server. Change them as per your need before running the server
- Run `python server.py` to initialize the server.
- `tests/` directory includes all the sample files that are used for nose-testing.
- `public_html` is the server directory that is used by the server to host the codes.
- `error_pages` contains all the templates of various error codes.
- `other_templates` contains other templates used for rendering by the Nex server.


### Notes
- Do not add trailing '/' in PUBLIC_HTML and ERROR_DIR or any other directory in settings.conf
- All the essential directories must be present in the appropriate location as mentioned in the configuration file.


### Features Supported
- Proper status_codes if file found or not ...
- Mimetype taken into account of returned file
- Variable injection in template
- Directory listing.
- HOST validation
- 404 forbidden, 404 not found etc error codes handeled
- Separate configuration file for server  
- Client mapping wrt IP address
- Threading between clients and locks and complete private data(using local variables for each thread)
- Tests written using nosetests and integrated in Travis-CI

### TODO
- Tests for all the errors returned
- Checking the presence of all the configuration/essential directories before forking the server thread.
