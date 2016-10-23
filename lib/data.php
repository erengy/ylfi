<?php

class Data {
    protected $fallacies = array();
    protected $pages = array();
    protected $slug = null;

    ////////////////////////////////////////////////////////////////////////////

    public function __construct() {
        $json = load_json_file('data/data.json');

        $this->fallacies = $json['fallacies'];
        $this->pages = $json['pages'];
    }

    public function isFallacy($slug) {
        return is_array($this->fallacies) && array_key_exists($slug, $this->fallacies);
    }

    public function getPage($slug) {
        return $this->isFallacy($slug) ? $this->fallacies[$slug] : $this->pages[$slug];
    }

    public function getPageData() {
        return $this->getPage($this->slug);
    }

    public function getFallacies() {
        return $this->fallacies;
    }

    public function getSlug() {
        return $this->slug;
    }
    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getPageUrl() {
        global $baseURI;

        if ($this->slug === 'home') {
            return $baseURI;
        } else {
            return $baseURI . '/' . $this->slug;
        }
    }

    public function getPageTitle() {
        $page = $this->getPage($this->slug);

        if ($this->isFallacy($this->slug)) {
            return 'Düştüğünüz mantık hatası: ' . $page['title'];
        } else {
            return $page['title'];
        }
    }

    public function getPageDescription() {
        $page = $this->getPage($this->slug);

        return $page['head'];
    }

    public function getPageImage() {
        global $baseURI;

        if ($this->isFallacy($this->slug)) {
            return $baseURI . '/assets/images/og/' . $this->slug . '.png';
        } else {
            return $baseURI . '/assets/images/og/default.jpg';
        }
    }

    public function getPageImageWidth() {
        return $this->isFallacy($this->slug) ? 150 : 1200;
    }

    public function getPageImageHeight() {
        return $this->isFallacy($this->slug) ? 150 : 900;
    }

    public function getPageHeaderImage() {
        global $baseURI;

        if ($this->isFallacy($this->slug)) {
            return $baseURI . '/assets/images/title-fallacy.png';
        } else {
            return $baseURI . '/assets/images/title-home.png';
        }
    }
}
