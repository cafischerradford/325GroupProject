<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Meats"/>
<body class="bg-gray-200">
    <x-header active="meats" :count="$count"/>
    <x-banner title="Meats" description="Here at Grocer, we are commited to sustainable and humane practices with every meat products. Our beef, pork, and poultry products come only from certifed organic American farms who raise their livestock on open pasture. Our seafood is wild caught and shipped directly to our stores for peak freshness." />
    <x-product-list :products="$products"/>
</body>
</html>