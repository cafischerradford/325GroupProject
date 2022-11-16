<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Snacks"/>
<body class="bg-gray-200">
    <x-header active="snacks" :count="$count"/>
    <x-banner title="Snacks" description="Our snack products come from small family owned companies who produce delicious treats that everyone can enjoy. We sell all our snacks in re-usable bulk packaging to cut down on costs for our customers while also reducing plastic waste." />
    <x-product-list :products="$products"/>
</body>
</html>