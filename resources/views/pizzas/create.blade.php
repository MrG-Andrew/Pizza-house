@extends('layouts.layout')

@section('content')

<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf  <!--built-in larvel server security -->
        <label for="name" >Your Name:</label>
        <input type="text" id="name" name="name" placeholder="ur name" required>
        <label for="type">Choose Pizza Type:</label>
        <select name="type" id="type" required>
            <option value="beef">beef</option>
            <option value="chicken">chicken</option>
            <option value="mashroom">mashroom</option>
            <option value="cheese">chesse</option>
        </select>
        <label for="base">Choose Base Type:</label>
        <select name="base" id="base" required>
            <option value="cheesy crust">cheesy crust</option>
            <option value="thin & crispy">thin & crispy</option>
            <option value="garlic crust">garlic crust</option>
            <option value="Thick & cheesy">Thick & chessy</option>
        </select>
        <fieldset>
            <label>Extra Toppings:</label><br>
            <input type="checkbox" name="toppings[]" id="toppings" value="">none <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="cheese">cheese <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="peppers">peppers <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="garlic">garlic <br>
            <input type="checkbox" name="toppings[]" id="toppings" value="olives">olives <br>

        </fieldset>
         <input type="submit" value="ORDER NOW"> <!--value is what the user sees -->
    </form>
</div>

@endsection