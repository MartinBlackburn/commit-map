# Commit map
See all you commit maps in real time.

### Githook setup

Copy the following to your post-commit hook.

```
#!/bin/sh
curl -d "message=`git log -n 1 HEAD --format=format:%s%n%b`" http://commitmap.tech/commit/
```
Don't forget to give the git hook permission to run.

```
chmod +x .git/hooks/post-commit
```

### Instructions to self host
1. Clone the repo to your server.
2. Setup Laravel (this project was created using version 5.3)
3. Add your pusher details in the .env file
4. Update the URL in the instructions and your githooks