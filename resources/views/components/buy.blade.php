<form action="ticket" method="post" class="form">

    @csrf

    <label for="name">Your name</label>
    <input type="text" id="name" name="name" placeholder="Insert your name" required>
    <label for="address">Address</label>
    <input name="address" id="address" type="text" placeholder="Your address" required>
    <label for="qShoes">Quantity of shoes</label>
    <input name="qShoes" id="qShoes"  type="number" placeholder="Insert number of shoes for buy" required>
    <label for="qShirts">Quantity of shirts</label>
    <input name="qShirts" id="qShirts"  type="number" placeholder="Insert number of shirts for buy" required>
    <label for="qSocks">Quantity of socks</label>
    <input name="qSocks" id="qSocks"  type="number" placeholder="Insert number of socks for buy" required>
    <button type="submit" class="btn-send">Send</button>
</form>
