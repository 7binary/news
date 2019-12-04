<?php

# apidoc -i ./apidoc -o ./public/apidoc/

/**
 * @api {get} /api/articles?filter=Путин&categories[]=1 Список статей
 * @apiName getArticles
 * @apiGroup Articles
 *
 * @apiParam {String} [filter] Строка для полнотекстового поиска
 * @apiParam {Array} [categories] Массив с ID категорий
 **
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 200 OK
 * [
 *   {
 *     "categories": [
 *       {
 *         "name": "Hi-Tech",
 *         "id": 1,
 *         "createdAt": "03.12.2019",
 *         "updatedAt": "03.12.2019",
 *         "deletedAt": null
 *       }
 *     ],
 *     "title": "Путин подписал закон о запрете продаж смартфонов без российского ПО",
 *     "text": "Президент одобрил новое правило продажи смартфонов и других устройств в России.",
 *     "id": 1,
 *     "createdAt": "03.12.2019",
 *     "updatedAt": "03.12.2019",
 *     "deletedAt": null
 *   }
 * ]
 */
function getArticles() {}

/**
 * @api {get} /api/categories Список категорий
 * @apiName getCategories
 * @apiGroup Categories
 *
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 200 OK
 * [
 *   {
 *     "name": "Hi-Tech",
 *     "id": 1,
 *     "createdAt": "03.12.2019",
 *     "updatedAt": "03.12.2019",
 *     "deletedAt": null,
 *   },
 *   {
 *     "name": "Спорт",
 *     "id": 2,
 *     "createdAt": "03.12.2019",
 *     "updatedAt": "03.12.2019",
 *     "deletedAt": null
 *   },
 *   {
 *     "name": "Кино",
 *     "id": 3,
 *     "createdAt": "03.12.2019",
 *     "updatedAt": "03.12.2019",
 *     "deletedAt": null
 *   }
 * ]
 */
function getCategories() {}

/**
 * @api {delete} /api/admin/articles/4 Удалить статью №4
 * @apiName deleteArticle
 * @apiGroup AdminArticles
 *
 * @apiHeaderExample {json} Header-Example:
 * {
 *   "X-AUTH-TOKEN": "admin_api_token"
 * }
 *
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 204 NO_CONTENT
 */
function deleteArticle() {}

/**
 * @api {put} /api/admin/articles/4 Обновить статью №4
 * @apiName updateArticle
 * @apiGroup AdminArticles
 *
 * @apiParamExample {json} Пример запроса:
 * {
 *   "title": "«Темный WhatsApp» приятно удивит пользователей",
 *   "text": "Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.",
 *   "categories": [1]
 * }
 *
 * @apiHeaderExample {json} Header-Example:
 * {
 *   "Content-Type": "application/json",
 *   "X-AUTH-TOKEN": "admin_api_token"
 * }
 *
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 200 OK
 * {
 *   "categories": [
 *     {
 *       "name": "Hi-Tech",
 *       "id": 1,
 *       "createdAt": "03.12.2019",
 *       "updatedAt": "03.12.2019",
 *       "deletedAt": null
 *     }
 *   ],
 *   "title": "«Темный WhatsApp» приятно удивит пользователей",
 *   "text": "Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.",
 *   "id": 4,
 *   "createdAt": "04.12.2019",
 *   "updatedAt": "05.12.2019",
 *   "deletedAt": null
 * }
 */
function updateArticle() {}

/**
 * @api {post} /api/admin/articles Добавить новую статью
 * @apiName createArticle
 * @apiGroup AdminArticles
 *
 * @apiParamExample {json} Пример запроса:
 * {
 *   "title": "«Темный WhatsApp» приятно удивит пользователей",
 *   "text": "Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.",
 *   "categories": [1]
 * }
 *
 * @apiHeaderExample {json} Header-Example:
 * {
 *   "Content-Type": "application/json",
 *   "X-AUTH-TOKEN": "admin_api_token"
 * }
 *
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 201 CREATED
 * {
 *   "categories": [
 *     {
 *       "name": "Hi-Tech",
 *       "id": 1,
 *       "createdAt": "03.12.2019",
 *       "updatedAt": "03.12.2019",
 *       "deletedAt": null
 *     }
 *   ],
 *   "title": "«Темный WhatsApp» приятно удивит пользователей",
 *   "text": "Этой весной стало известно, что мессенджер WhatsApp получит поддержку темной темы. Сейчас работа над крупным апдейтом сервиса закончена, осталось только дождаться релиза обновления.",
 *   "id": 4,
 *   "createdAt": "04.12.2019",
 *   "updatedAt": "04.12.2019",
 *   "deletedAt": null
 * }
 */
function createArticle() {}

/**
 * @api {delete} /api/admin/categories/3 Удалить категорию №3
 * @apiName deleteCategory
 * @apiGroup AdminCategories
 *
 * @apiHeaderExample {json} Header-Example:
 * {
 *   "X-AUTH-TOKEN": "admin_api_token"
 * }
 *
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 204 NO_CONTENT
 */
function deleteCategory() {}

/**
 * @api {put} /api/admin/category/3 Обновить категорию №3
 * @apiName updateCategory
 * @apiGroup AdminCategories
 *
 * @apiParamExample {json} Пример запроса:
 * {
 *   "name": "Игры",
 * }
 *
 * @apiHeaderExample {json} Header-Example:
 * {
 *   "Content-Type": "application/json",
 *   "X-AUTH-TOKEN": "admin_api_token"
 * }
 *
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 200 OK
 * {
 *   "name": "Игры",
 *   "id": 3,
 *   "createdAt": "03.12.2019",
 *   "updatedAt": "03.12.2019",
 *   "deletedAt": null
 * }
 */
function updateCategory() {}

/**
 * @api {post} /api/admin/categories Добавить новую категорию
 * @apiName createCategory
 * @apiGroup AdminCategories
 *
 * @apiParamExample {json} Пример запроса:
 * {
 *   "name": "Игры"
 * }
 *
 * @apiHeaderExample {json} Header-Example:
 * {
 *   "Content-Type": "application/json",
 *   "X-AUTH-TOKEN": "admin_api_token"
 * }
 *
 * @apiSuccessExample {json} Пример успешного ответа:
 * HTTP/1.1 201 CREATED
 * {
 *   "name": "Игры",
 *   "id": 4,
 *   "createdAt": "03.12.2019",
 *   "updatedAt": "03.12.2019",
 *   "deletedAt": null
 * }
 */
function createCategory() {}

