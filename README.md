I could not add everything to the test project I would have like in the given 8 hours.

This is how far I was able to get. If you could give me another two hours I should be able to complete it.

The program has a single docker-compose file that launches the dependent containers. 

The projects is not completre but you sould see where I was going. Just make sure docker is installed as well as docker-compose.

to start the project, from the root directory run 

"docker-compose up -d --build"

That will launch the empty project. 

The   test database is not persisted so in order to see anything, you would need to migrate and seed the database with

"""docker-compose run --rm artisan migrate --seed"

thr project will be viewable in your browser under the URL "http://0.0.0.0:8080"

