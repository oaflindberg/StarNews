<?php

declare(strict_types=1);

/**
 * Sorts the articles by published date.
 *
 * @param array $a
 * @param array $b
 * @return integer
 */
function sortByDate(array $a, array $b): int
{
    return strtotime($b['published']) - strtotime($a['published']);
}


/**
 * Generates a random amount of likes.
 *
 * @return int
 */
function randomLikes(): int
{
    return rand(1977, 2019);
};

/**
 * Picks one of the titles in the array and adds it to an article.
 *
 * @return string
 */
function getRandomTitle(): string
{
    $titles = [
        'Skywalker mara obi-wan maul boba tusken raider.',
        'Jinn jade hutt sebulba skywalker organa.',
        'Dooku hutt moff jawa calrissian jinn jabba. ',
        'Droid hutt mace yavin jade skywalker ben kit yoda.',
        'Moff dooku solo skywalker ponda solo darth.',
        'Organa dagobah han ackbar dooku.',
        'C-3po secura organa solo hutt darth droid moff c-3p0.',
        'Ahsoka boba luke amidala biggs maul luke hutt darth.',
        'Anakin yoda sebulba skywalker wookiee calamari dantooine.',
        'Utapau kamino fett wedge yavin.',
        'Jinn grievous owen kenobi ben vader.',
        'Mace antilles sidious antilles.',
        'Hutt yoda jar naboo lando baba boba luuke.',
        'Moff leia jar solo darth chewbacca cade mara solo.',
        'Utapau chewbacca yoda ponda.',
        'Coruscant han calrissian antilles grievous.',
    ];
    $randomIndex = array_rand($titles);
    $randomTitle = $titles[$randomIndex];
    return $randomTitle;
}
