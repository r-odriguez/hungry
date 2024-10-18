<!DOCTYPE html>
<html>
    <?= tusk\partials("head", ctx: [
        'scripts' => ['js/search.js']
    ]) ?>

    <body class="items-center justify-center gap-4">
        <div class="relative">
            <p id="indicator" class="htmx-indicator absolute right-0 top-[-2rem]">
                searching...
            </p>
            <input class="text-[14pt] leading-[150%] p-2 min-w-72 rounded border"
                   hx-trigger="keyup changed delay:200ms"
                   hx-get="/hx/search-restaurants"
                   hx-target="#res"
                   hx-swap="innerHTML"
                   hx-indicator="#indicator"
                   type="search"
                   name="name"
                   placeholder="Search for a restaurant"
                   autocomplete="off"
            />
            <div class="empty:hidden absolute mt-2 p-2 rounded border shadow bg-white"
                 id="res"
            ></div>
        </div>
    </body>

</html>
