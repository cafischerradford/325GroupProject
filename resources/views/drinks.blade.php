<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Drinks"/>
<body class="bg-gray-200">
    <x-header active="drinks" :count="$count"/>
    <x-banner title="Drinks" description="Our drinks come from local, award winning, brewers, wineries, and distilleries. We chose our sources because of their meticulous care for each drink, so we can ensure our customers recieve the highest quality beverages with every bottle." />
    <x-product-list :products="$products"/>
</body>
</html>