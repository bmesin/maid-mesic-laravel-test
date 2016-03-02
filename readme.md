# Destination Resolver - PHP Technical Test

----

The Destination Resolver can take some input parameters and resolve them to a destination URL.

##### The Input Parameters:

- **cid** is the campaign ID. We want to resolve this campaign's destination URL. The **cid** is an integer.
- **aid** is the affiliate ID. The affiliate is our traffic source. The **aid** is an integer.
- **sid** is a Sub ID - identifying the affiliate's traffic source. It can be any URL safe string.

##### The Destination URL Template
Each campaign has a destination URL template (see "destination" property in campaigns.json). A destination URL template can contain placeholders, also known as **tokens**, which need to be populated.

The available tokens are:

- {cid} - The campaign ID taken from the input parameters
- {aid} - The Affiliate ID taken from the input parameters
- {sid} - The Sub ID taken from the input parameters
- {rand} - A random integer
- {date} - The current date (format: 2016-02-29)

## Example
##### Campaign JSON:
```
{
  "id": "1001374",
  "title": "(WAP-Android) WhatsApp Wallpapers (3G+Wifi) - Argentina",
  "destination": "http:\/\/m.ar.mundome.com\/wap\/938\/?af_e_offer={cid}&af_code={rand}&af_e={aid}&af_e_sid={sid}&date={date}"
}
```

##### Input:

* Campaign ID: 1001374
* Affiliate ID: 702005
* Sub ID: hello-there

##### Result Destination URL:
``http://m.ar.mundome.com/wap/938/?af_e_offer=1001374&af_code=6854764&af_e=702005&af_e_sid=hello-there&date=2016-03-02``

## Tasks
##### 1. Populate campaigns and affiliates select options from JSON data
File paths:

- ``storage/data/campaigns.json``
- ``storage/data/affiliates.json``

**Hint:** The ``storage_path()`` helper function will help you to access the data.

Please order campaigns by title and please order affiliates by name.

##### 2. Implement the ResolveDestination service
This service can resolve the given input (cid, aid and sid) into the corresponding populated destination URL.

You will have to use the campaigns.json data to find the corresponding destination URL template and then populate any tokens as described above.

The class has been stubbed out for you at: ``app/Services/Destination/ResolveDestination.php``

**Hint:** Feel free to refactor the given code as you see fit or add any additional classes you may need for your solution.

Please unit test this service using phpunit:

- Starter test file: ``tests/Destination/Service/ResolveDestinationTest.php``
- Simply run ``phpunit`` to run your tests

##### Bonus Task: Add Validation
At least **cid** and **aid** have to be selected, otherwise display an error message.

## Useful Resources
- [Laravel Documentation](https://laravel.com/docs)
- [PHPUnit Manual](https://phpunit.de/manual/current/en/)
