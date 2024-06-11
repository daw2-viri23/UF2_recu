<?php

interface Observer {
    public function update(Observable $subject);
}

abstract class Widget implements Observer {
    protected $internalData = array();

    abstract public function draw();

    public function update(Observable $subject) {
        $this->internalData = $subject->getData();
    }
}

class BasicWidget extends Widget {
    public function draw() {
        $html = "<table border=1 width=130>";
        $html .= "<tr><td colspan=3 bgcolor=#cccccc><b>Instrument Info</b></td></tr>";
        foreach ($this->internalData['instruments'] as $index => $instrument) {
            $price = $this->internalData['prices'][$index];
            $year = $this->internalData['years'][$index];
            $html .= "<tr><td>$instrument</td><td>$price</td><td>$year</td></tr>";
        }
        $html .= "</table><br>";
        echo $html;
    }
}

class FancyWidget extends Widget {
    public function draw() {
        $html = "<table border=0 cellpadding=5 width=270 bgcolor=#6699BB>";
        $html .= "<tr><td colspan=3 bgcolor=#cccccc><b><span class=blue>Our Latest Prices</span></b></td></tr>";
        $html .= "<tr><td><b>instrument</b></td><td><b>price</b></td><td><b>date issued</b></td></tr>";
        foreach ($this->internalData['instruments'] as $index => $instrument) {
            $price = $this->internalData['prices'][$index];
            $year = $this->internalData['years'][$index];
            $html .= "<tr><td>$instrument</td><td>$price</td><td>$year</td></tr>";
        }
        $html .= "</table><br>";
        echo $html;
    }
}
?>
