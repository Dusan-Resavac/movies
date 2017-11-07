<?php

namespace HTL3R\KungFuMovies;

abstract class AbstractKungFuMovie
{
    // Name of the movie - a string
    private $name = "nonameset";
    // rating of the movie - must be an integer of 1 to 5
    private $rating = 1;
    // URI to a trailer of the movie
    private $movieURI = "https://www.youtube.com";

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getRating(): int
    {
        return $this->rating;
    }

    /**
     * @return string
     */
    public function getMovieURI(): string
    {
        return $this->movieURI;
    }

    /**
     * AbstractKungFuMovie constructor.
     * @param string $name Name of the movie
     * @param int $rating rating of the movie - must be of 1 to 5
     * @param string $movieURI URI to the trailer of the movie
     */
    public function __construct(string $name, int $rating, string $movieURI)
    {
        $this->name = $name;
        $this->rating = $rating;
        $this->movieURI = $movieURI;
    }
}