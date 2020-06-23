<?php
session_start();

function MenssagemDeErro()
{
  if (isset($_SESSION["MenssagemDeErro"])) {
    $msg = "<div>";
    $msg .= htmlentities($_SESSION["MenssagemDeErro"]);
    $msg .= "</div>";
    $_SESSION["MenssagemDeErro"] = null;
    return $msg;
  }
}

function Sucesso()
{
  if (isset($_SESSION["Sucesso"])) {
    $msg = "<div>";
    $msg .= htmlentities($_SESSION["Sucesso"]);
    $msg .= "</div>";
    $_SESSION["Sucesso"] = null;
    return $msg;
  }
}
