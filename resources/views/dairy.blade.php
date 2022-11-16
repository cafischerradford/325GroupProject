<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Dairy"/>
<body class="bg-gray-200">
    <x-header active="dairy" :count="$count"/>
    <x-banner title="Dairy" description="Our dairy products come from the best dairy farms in America. These farms have only pasture raised A2A2 cows with no rBST, so you can ensure you and your family recieve the best dairy products available when purchasing from us." />
    <x-product-list :products="$products"/>
</body>
</html>