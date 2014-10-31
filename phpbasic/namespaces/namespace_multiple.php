<?php
namespace MyProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }

namespace AnotherProject;

const CONNECT_OK = 1;
class Connection { /* ... */ }
function connect() { /* ... */  }


//Fatal error: Cannot mix bracketed namespace declarations with unbracketed namespace declarations
namespace MyProject2 {

  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
}

namespace AnotherProject2 {

  const CONNECT_OK = 1;
  class Connection { /* ... */ }
  function connect() { /* ... */  }
}


