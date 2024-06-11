<?php

class Observable {
    private $observers = array();
    private $data = array();

    public function addObserver($observer) {
        $this->observers[] = $observer;
    }

    public function removeObserver($observer) {
        $index = array_search($observer, $this->observers);
        if ($index !== false) {
            unset($this->observers[$index]);
        }
    }

    public function notifyObservers() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addRecord($instrument, $price, $year) {
        $this->data['instruments'][] = $instrument;
        $this->data['prices'][] = $price;
        $this->data['years'][] = $year;
        $this->notifyObservers();
    }

    public function getData() {
        return $this->data;
    }
}
?>
