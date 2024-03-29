<!DOCTYPE html>

<html>
  <head>
    <title>Kalkulator</title>
    <link rel="stylesheet" type="text/css" href="style/calculator.css" />
    <script
      language="JavaScript"
      src="script/calcScript.js"
      type="text/javascript"
    ></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
  </head>
  <body>
    <header>
      <div class="judul">
        <h1>Kalkulator</h1>
      </div>
    </header>
    <div id="calculator">
      <h1>_________</h1>
      <p id="last_operation_history"></p>
      <p id="box" class="box">0</p>
      <table id="table">
        <tr>
          <td>
            <button
              id="modOp"
              value="+"
              class="operator"
              onclick="button_number('%')"
            >
              %
            </button>
          </td>
          <td><button onclick="clear_entry()">CE</button></td>
          <td><button onclick="button_clear()">C</button></td>
          <td>
            <button id="backspace_btn" onclick="backspace_remove()"></button>
          </td>
        </tr>
        <tr>
          <td><button onclick="division_one()">¹∕ₓ</button></td>
          <td><button onclick="power_of()">𝑥²</button></td>
          <td><button onclick="square_root()">√𝑥</button></td>
          <td>
            <button
              id="plusOp"
              value="+"
              class="operator"
              onclick="button_number('+')"
            >
              +
            </button>
          </td>
        </tr>
        <tr>
          <td><button onclick="button_number(7)">7</button></td>
          <td><button onclick="button_number(8)">8</button></td>
          <td><button onclick="button_number(9)">9</button></td>
          <td>
            <button
              id="subOp"
              value="-"
              class="operator"
              onclick="button_number('-')"
            >
              -
            </button>
          </td>
        </tr>
        <tr>
          <td><button onclick="button_number(4)">4</button></td>
          <td><button onclick="button_number(5)">5</button></td>
          <td><button onclick="button_number(6)">6</button></td>
          <td>
            <button
              id="multiOp"
              value="*"
              class="operator"
              onclick="button_number('*')"
            >
              ×
            </button>
          </td>
        </tr>
        <tr>
          <td><button onclick="button_number(1)">1</button></td>
          <td><button onclick="button_number(2)">2</button></td>
          <td><button onclick="button_number(3)">3</button></td>
          <td>
            <button
              id="divOp"
              value="/"
              class="operator"
              onclick="button_number('/')"
            >
              /
            </button>
          </td>
        </tr>
        <tr>
          <td><button onclick="plus_minus()">±</button></td>
          <td><button onclick="button_number(0)">0</button></td>
          <td>
            <button id="dot" value="." onclick="button_number('.')">.</button>
          </td>
          <td colspan="4">
            <button
              value="="
              class="operator"
              id="equal_sign"
              onclick="button_number('=')"
            >
              =
            </button>
          </td>
        </tr>
      </table>
    </div>

    <div class="footer">
      <p>
        <a href="/">Kembali</a>
      </p>
    </div>
  </body>
</html>
