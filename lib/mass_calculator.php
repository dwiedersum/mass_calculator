<?php
namespace mass_calculator;

function calculate_gravitational_force_on_earth($weight){
    $gravity = 9.81;
    $gravitational_force = $weight * $gravity;
    $gravitational_force = round($gravitational_force, 2);
    return $gravitational_force;
}

function calculate_weight_on_moon($weight){
    $gravity_moon = 1.62;
    $gravity_earth = 9.81;
    $weight = $gravity_moon * $weight / $gravity_earth;
    $weight = round($weight, 2);
    return $weight;
}
function calculate_gravitational_force_on_moon($weight){
    $weight = calculate_weight_on_moon($weight);
    $gravity_moon = 1.62;
    $gravitational_force = $weight * $gravity_moon;
    $gravitational_force = round($gravitational_force, 2);
    return $gravitational_force;
}
