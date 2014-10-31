<?php
//No PHP code may exist outside of the namespace brackets except for an opening declare statement.
declare(encoding='UTF-8');
namespace MyProject {

  const CONNECT_OK = 1;

  class Connection {
    public function start() {
      return 'start';
    }
  }

  function connect() { /* ... */  }
}

namespace { // global code
  session_start();
  $a = MyProject\connect();
  echo MyProject\Connection::start();
}