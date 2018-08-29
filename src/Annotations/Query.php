<?php


namespace TheCodingMachine\GraphQL\Controllers\Annotations;

/**
 * @Annotation
 * @Target({"METHOD"})
 * @Attributes({
 *   @Attribute("returnType", type = "string"),
 * })
 */
class Query extends AbstractRequest
{
}
