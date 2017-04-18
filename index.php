<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php if ($meta_description = get_field('seo_page_description')) { echo $meta_description; } else { echo 'GoSpotCheck helps you streamline your field team’s surveys, audits and reports with mobile data collection software.'; } ?>">
    <link href="<?php bloginfo('template_url'); ?>/favicon.ico" rel="shortcut icon">
    <title>Quote-O-Matic</title>
</head>

<body>
    <section class="content content--hero">
        <h1 class="content__h1 content__h1--logo">
            Quote-O-Matic
        </h1>
        <h3 class="content__h3">
            A little repository of verified quotes.
        </h3>
        <form class="form form--hero">
            <input type="search" placeholder="Find something interesting..." class="form__input form__input--rounded">
            <input type="submit" class="form__input form__input--search">
        </form>
    </section>

    <section class="content content--qotd align--center">
        <q cite="xxx" class="quote quote--large">
            Human beings are works in progress that mistakenly think they’re finished.
        </q>
        <cite class="cite" id="xxx">
            <span class="cite__author">Daniel Gilbert</span>
            <span class="cite__source">Stumbling on Happiness</span>
        </cite>
    </section>

    <section class="content content--light">
        <h2 class="content__h2">
            Collections
        </h2>
        <p class="content__p">
            Explore the world through hand-curated collections of quotes, each grouped by a unifying theme. <a href="#">Browse all collections &raquo;</a>
        </p>

        <div class="card-catalog">
            <article class="card">
                <img class="card__image" src="foo.jpg">
                <h1 class="article__h1">
                    Overheard In...
                </h1>
                <p class="article__p">
                    Inspired by a random thing I heard on the streets of Astoria. This is the only collection of non-verified quotes in our library.
                </p>
            </article>

            <article class="card">
                <img class="card__image" src="foo.jpg">
                <h1 class="article__h1">
                    Overheard In...
                </h1>
                <p class="article__p">
                    Inspired by a random thing I heard on the streets of Astoria. This is the only collection of non-verified quotes in our library.
                </p>
            </article>

            <article class="card">
                <img class="card__image" src="foo.jpg">
                <h1 class="article__h1">
                    Overheard In...
                </h1>
                <p class="article__p">
                    Inspired by a random thing I heard on the streets of Astoria. This is the only collection of non-verified quotes in our library.
                </p>
            </article>

            <article class="card">
                <img class="card__image" src="foo.jpg">
                <h1 class="article__h1">
                    Overheard In...
                </h1>
                <p class="article__p">
                    Inspired by a random thing I heard on the streets of Astoria. This is the only collection of non-verified quotes in our library.
                </p>
            </article>

            <menu class="card-catalog__nav">
                <button class="card-catalog__nav-prev">Scroll Left</button>
                <button class="card-catalog__nav-next">Scroll Right</button>
            </menu>
        </div>
    </section>

    <section class="content">
        <h2 class="content__h2">
            Quotes
        </h2>
        <p class="content__p">
            We pride ourselves on sourcing and verifying our quotes. As this is a work in progress, look for the green seal to verify a quote is legit. <a href="#">Browse all quotes &raquo;</a>
        </p>

        <article class="quote">
            <img class="quote__image" src="foo.jpg">
            <div class="quote__content">
                <q cite="yyy" class="quote__quote">
                    Time is a river which sweeps me along, but I am the river; it is a tiger which destroys me, but I am the tiger; it is a fire which consumes me, but I am the fire.
                </q>
                <cite class="cite quote__cite" id="xxx">
                    <span class="cite__author">Daniel Gilbert</span>
                    <span class="cite__source">Stumbling on Happiness</span>
                </cite>
            </div>
        </article>

        <article class="quote">
            <img class="quote__image" src="foo.jpg">
            <div class="quote__content">
                <q cite="yyy" class="quote__quote">
                    Time is a river which sweeps me along, but I am the river; it is a tiger which destroys me, but I am the tiger; it is a fire which consumes me, but I am the fire.
                </q>
                <cite class="cite quote__cite" id="xxx">
                    <span class="cite__author">Daniel Gilbert</span>
                    <span class="cite__source">Stumbling on Happiness</span>
                </cite>
            </div>
        </article>

        <article class="quote">
            <img class="quote__image" src="foo.jpg">
            <div class="quote__content">
                <q cite="yyy" class="quote__quote">
                    Time is a river which sweeps me along, but I am the river; it is a tiger which destroys me, but I am the tiger; it is a fire which consumes me, but I am the fire.
                </q>
                <cite class="cite quote__cite" id="xxx">
                    <span class="cite__author">Daniel Gilbert</span>
                    <span class="cite__source">Stumbling on Happiness</span>
                </cite>
            </div>
        </article>
    </section>

    <footer class="footer">
        <a class="footer__logo">Quote-O-Matic Home</a>
        <ul class="footer__nav">
            <li>
                <a href="#">About</a>
                <a href="#">Privacy</a>
                <a href="#">Terms</a>
            </li>
        </ul>
        <small class="footer__copyright">
            &copy; 2007-2017 <strong>R.C. Burney</strong>
        </small>
    </footer>

    <header class="header">
        <button class="header__button header__button--navigate">
            Navigate
        </button>
        <a class="header__logo" href="#">Quote-O-Matic></a>
        <button class="header__button header__button--user">
            <img class="header__avatar" src="foo.jpg">
        </button>
    </header>

    <menu class="menu menu__drawer">
        <span class="menu__nav-header">
            Navigating
        </span>
        <ul class="menu__options">
            <li class="menu__option">
                <a href="#">
                    Quotes
                    <i class="material-icons menu__icon">format_quote</i>
                </a>
            </li>
            <li class="menu__option">
                <a href="#">
                    Collections
                    <i class="material-icons menu__icon">question_answer</i>
                </a>
            </li>
            <li class="menu__option">
                <a href="#">
                    Authors
                    <i class="material-icons menu__icon">people</i>
                </a>
            </li>
            <li class="menu__option">
                <a href="#">
                    Favorites
                    <i class="material-icons menu__icon">favorite</i>
                </a>
            </li>
        </ul>
    </menu>

    <menu class="menu menu__dropdown">
        <div class="menu__user-info">
            <h5 class="menu__user-name">Ryan Burney</h5>
            <span class="menu__user-role">Administrator</span>
        </div>
        <ul class="menu__options">
            <li class="menu__option">
                <a href="#">
                    Add Quote
                    <i class="material-icons menu__icon">format_quote</i>
                </a>
            </li>
            <li class="menu__option">
                <a href="#">
                    Dashboard
                    <i class="material-icons menu__icon">explore</i>
                </a>
            </li>
            <li class="menu__option menu__option--signout">
                <a href="#">
                    Sign Out
                    <i class="material-icons menu__icon">lock</i>
                </a>
            </li>
        </ul>
    </menu>

    <div class="fancybox-qqq">
        <div class="lightbox__header">
            <h1>Add Quote</h1>
        </div>
        <div class="lightbox__content">
            <form class="form">
                <div class="form__field">
                    <label class="form__label">
                        Quote
                    </label>
                    <span class="form__meta-text">
                        1,452 characters left
                    </span>
                    <textarea class="form__textarea" name="xxx"></textarea>
                </div>
                <div class="form__field">
                    <label class="form__label">
                        Attributed to
                    </label>
                    <span class="form__meta-text">
                        Leave blank for &ldquo;Anonymous&rdquo;
                    </span>
                    <input class="form__input" name="xxx">
                </div>
                <div class="form__field">
                    <label class="form__label">
                        Sourced from
                    </label>
                    <input class="form__input" name="xxx">
                </div>
                <div class="form__field">
                    <label class="form__label">
                        Add to which Collections?
                    </label>
                    <input class="form__input" name="xxx">
                </div>
                <button type="submit" class="button button--ok" value="Post Quote">Post Quote</button>
            </form>
        </div>
    </div>
</body>
</html>