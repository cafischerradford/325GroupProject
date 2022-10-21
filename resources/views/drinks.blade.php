<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Drinks"/>
<body>
    <x-header active="drinks"/>
    <x-banner title="Drinks" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, maxime tempore quibusdam quae dignissimos harum deserunt quod nesciunt quos fuga maiores ea repudiandae voluptatibus deleniti voluptate consectetur. Deserunt, nulla sed." />
    <x-product-list :products="$products"/>
</body>
</html>