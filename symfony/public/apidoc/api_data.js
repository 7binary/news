define({ "api": [  {    "type": "post",    "url": "/api/admin/articles",    "title": "Добавить новую статью",    "name": "createArticle",    "group": "AdminArticles",    "parameter": {      "examples": [        {          "title": "Пример запроса:",          "content": "{\n  \"title\": \"«Темный WhatsApp» приятно удивит пользователей\",\n  \"text\": \"Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.\",\n  \"categories\": [1]\n}",          "type": "json"        }      ]    },    "header": {      "examples": [        {          "title": "Header-Example:",          "content": "{\n  \"Content-Type\": \"application/json\",\n  \"X-AUTH-TOKEN\": \"admin_api_token\"\n}",          "type": "json"        }      ]    },    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 201 CREATED\n{\n  \"categories\": [\n    {\n      \"name\": \"Hi-Tech\",\n      \"id\": 1,\n      \"createdAt\": \"03.12.2019\",\n      \"updatedAt\": \"03.12.2019\",\n      \"deletedAt\": null\n    }\n  ],\n  \"title\": \"«Темный WhatsApp» приятно удивит пользователей\",\n  \"text\": \"Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.\",\n  \"id\": 4,\n  \"createdAt\": \"04.12.2019\",\n  \"updatedAt\": \"04.12.2019\",\n  \"deletedAt\": null\n}",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "AdminArticles"  },  {    "type": "delete",    "url": "/api/admin/articles/4",    "title": "Удалить статью №4",    "name": "deleteArticle",    "group": "AdminArticles",    "header": {      "examples": [        {          "title": "Header-Example:",          "content": "{\n  \"X-AUTH-TOKEN\": \"admin_api_token\"\n}",          "type": "json"        }      ]    },    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 204 NO_CONTENT",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "AdminArticles"  },  {    "type": "put",    "url": "/api/admin/articles/4",    "title": "Обновить статью №4",    "name": "updateArticle",    "group": "AdminArticles",    "parameter": {      "examples": [        {          "title": "Пример запроса:",          "content": "{\n  \"title\": \"«Темный WhatsApp» приятно удивит пользователей\",\n  \"text\": \"Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.\",\n  \"categories\": [1]\n}",          "type": "json"        }      ]    },    "header": {      "examples": [        {          "title": "Header-Example:",          "content": "{\n  \"Content-Type\": \"application/json\",\n  \"X-AUTH-TOKEN\": \"admin_api_token\"\n}",          "type": "json"        }      ]    },    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 200 OK\n{\n  \"categories\": [\n    {\n      \"name\": \"Hi-Tech\",\n      \"id\": 1,\n      \"createdAt\": \"03.12.2019\",\n      \"updatedAt\": \"03.12.2019\",\n      \"deletedAt\": null\n    }\n  ],\n  \"title\": \"«Темный WhatsApp» приятно удивит пользователей\",\n  \"text\": \"Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.\",\n  \"id\": 4,\n  \"createdAt\": \"04.12.2019\",\n  \"updatedAt\": \"05.12.2019\",\n  \"deletedAt\": null\n}",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "AdminArticles"  },  {    "type": "post",    "url": "/api/admin/categories",    "title": "Добавить новую категорию",    "name": "createCategory",    "group": "AdminCategories",    "parameter": {      "examples": [        {          "title": "Пример запроса:",          "content": "{\n  \"name\": \"Игры\"\n}",          "type": "json"        }      ]    },    "header": {      "examples": [        {          "title": "Header-Example:",          "content": "{\n  \"Content-Type\": \"application/json\",\n  \"X-AUTH-TOKEN\": \"admin_api_token\"\n}",          "type": "json"        }      ]    },    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 201 CREATED\n{\n  \"name\": \"Игры\",\n  \"id\": 4,\n  \"createdAt\": \"03.12.2019\",\n  \"updatedAt\": \"03.12.2019\",\n  \"deletedAt\": null\n}",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "AdminCategories"  },  {    "type": "delete",    "url": "/api/admin/categories/3",    "title": "Удалить категорию №3",    "name": "deleteCategory",    "group": "AdminCategories",    "header": {      "examples": [        {          "title": "Header-Example:",          "content": "{\n  \"X-AUTH-TOKEN\": \"admin_api_token\"\n}",          "type": "json"        }      ]    },    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 204 NO_CONTENT",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "AdminCategories"  },  {    "type": "put",    "url": "/api/admin/category/3",    "title": "Обновить категорию №3",    "name": "updateCategory",    "group": "AdminCategories",    "parameter": {      "examples": [        {          "title": "Пример запроса:",          "content": "{\n  \"name\": \"Игры\",\n}",          "type": "json"        }      ]    },    "header": {      "examples": [        {          "title": "Header-Example:",          "content": "{\n  \"Content-Type\": \"application/json\",\n  \"X-AUTH-TOKEN\": \"admin_api_token\"\n}",          "type": "json"        }      ]    },    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 200 OK\n{\n  \"name\": \"Игры\",\n  \"id\": 3,\n  \"createdAt\": \"03.12.2019\",\n  \"updatedAt\": \"03.12.2019\",\n  \"deletedAt\": null\n}",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "AdminCategories"  },  {    "type": "get",    "url": "/api/articles?filter=Путин&categories[]=1",    "title": "Список статей",    "name": "getArticles",    "group": "Articles",    "parameter": {      "fields": {        "Parameter": [          {            "group": "Parameter",            "type": "String",            "optional": true,            "field": "filter",            "description": "<p>Строка для полнотекстового поиска</p>"          },          {            "group": "Parameter",            "type": "Array",            "optional": true,            "field": "categories",            "description": "<p>Массив с ID категорий *</p>"          }        ]      }    },    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 200 OK\n[\n  {\n    \"categories\": [\n      {\n        \"name\": \"Hi-Tech\",\n        \"id\": 1,\n        \"createdAt\": \"03.12.2019\",\n        \"updatedAt\": \"03.12.2019\",\n        \"deletedAt\": null\n      }\n    ],\n    \"title\": \"Путин подписал закон о запрете продаж смартфонов без российского ПО\",\n    \"text\": \"Президент одобрил новое правило продажи смартфонов и других устройств в России.\",\n    \"id\": 1,\n    \"createdAt\": \"03.12.2019\",\n    \"updatedAt\": \"03.12.2019\",\n    \"deletedAt\": null\n  }\n]",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "Articles"  },  {    "type": "get",    "url": "/api/categories",    "title": "Список категорий",    "name": "getCategories",    "group": "Categories",    "success": {      "examples": [        {          "title": "Пример успешного ответа:",          "content": "HTTP/1.1 200 OK\n[\n  {\n    \"name\": \"Hi-Tech\",\n    \"id\": 1,\n    \"createdAt\": \"03.12.2019\",\n    \"updatedAt\": \"03.12.2019\",\n    \"deletedAt\": null,\n  },\n  {\n    \"name\": \"Спорт\",\n    \"id\": 2,\n    \"createdAt\": \"03.12.2019\",\n    \"updatedAt\": \"03.12.2019\",\n    \"deletedAt\": null\n  },\n  {\n    \"name\": \"Кино\",\n    \"id\": 3,\n    \"createdAt\": \"03.12.2019\",\n    \"updatedAt\": \"03.12.2019\",\n    \"deletedAt\": null\n  }\n]",          "type": "json"        }      ]    },    "version": "0.0.0",    "filename": "apidoc/all.php",    "groupTitle": "Categories"  }] });
