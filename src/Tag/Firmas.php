<?php

namespace Mpdf\Tag;

class Firmas extends BlockTag
{

  public function open($attr, &$ahtml, &$ihtml) {
    $this->mpdf->firmas();
  }

}