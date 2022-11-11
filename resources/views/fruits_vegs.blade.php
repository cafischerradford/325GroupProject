<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Fruits & Vegetables"/>
<body class="bg-gray-200">
    <x-header active="fruits_vegetables" :count="$count"/>
    <x-banner title="Fruits & Vegetables" description="Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem, maxime tempore quibusdam quae dignissimos harum deserunt quod nesciunt quos fuga maiores ea repudiandae voluptatibus deleniti voluptate consectetur. Deserunt, nulla sed." />
    <x-product-list :products="$products" /> 
</body>
</html>