<!DOCTYPE html>
<html>

    <?= tusk\partials("head", ctx: [
        'scripts' => ['js/search.js']
    ]) ?>

    <style>
     body {
         gap: 1rem;

         & #form {
             position: relative;

             & #indicator {
                 position: absolute;
                 right: .5rem;
             }

             & input {
                 font-size: 16pt;
                 line-height: 150%;
                 padding: .5rem;
                 border-radius: .25rem;
                 border: 2px solid #ababab;
             }
         }
     }
    </style>

    <body>
        <div id="form">
            <p id="indicator" class="htmx-indicator">searching...</p>

            <input
                hx-get="/search"
                hx-target="#res"
                hx-trigger="keyup changed delay:200ms"
                hx-swap="innerHTML"
                hx-indicator="#indicator"
                type="search"
                name="name"
                placeholder="type the name of a restaurant"
            />
        </div>

        <div id="res"></div>
    </body>

</html>
