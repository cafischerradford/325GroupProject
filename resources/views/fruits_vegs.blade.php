<!DOCTYPE html>
<html lang="en">
<x-head title="Grocer | Fruits & Vegetables"/>
<body class="bg-gray-200">
    <x-header active="fruits_vegetables" :count="$count"/>
    <x-banner title="Fruits & Vegetables" description="Our fruits and vegetables are sourced from American farmers who use only the best organic farming practices. Each of our fruit and vegtable products are packaged at the peak of ripeness and delivered to our stores within hours. You can be confident you are recieving the best american produce avalable when shopping with Grocer." />
    <x-product-list :products="$products" /> 
</body>
</html>