<?php

/**
 * This file is part of Railt package and has been autogenerated.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @see https://github.com/railt/sdl/blob/2.0.x-dev/LICENSE.md
 * @see https://github.com/phplrt/parser/blob/2.2.2/LICENSE.md
 * @see https://github.com/phplrt/lexer/blob/2.2.2/LICENSE.md
 */

declare(strict_types=1);

namespace Railt\SDL\Parser;

use Phplrt\Contracts\Ast\NodeInterface;
use Phplrt\Contracts\Lexer\TokenInterface;
use Phplrt\Contracts\Source\ReadableInterface;
use Phplrt\Parser\Builder\BuilderInterface;
use Phplrt\Parser\Rule\RuleInterface;
use Railt\SDL\Exception\SyntaxErrorException;

/**
 * @internal This class is generated by railt/parser, specifically by Railt\SDL\Parser\Generator\Generator
 */
final class Builder implements BuilderInterface
{
    /**
     * {@inheritDoc}
     * @throws SyntaxErrorException
     * @throws \Throwable
     */
    public function build(ReadableInterface $file, RuleInterface $rule, TokenInterface $token, $state, $children)
    {
        try {
            return $this->reduce($state, $children);
        } catch (SyntaxErrorException $e) {
            throw $e;
        } catch (\Exception $e) {
            throw new SyntaxErrorException($e->getMessage(), $file, $token->getOffset());
        }
    }

    /**
     * @param int|string $state
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    private function reduce($state, $children)
    {
        switch ($state) {
            case 'Identifier':
                return $this->reduceIdentifier($children);
            case 'TypeName':
                return $this->reduceTypeName($children);
            case 'ListType':
                return $this->reduceListType($children);
            case 'NonNullType':
                return $this->reduceNonNullType($children);
            case 'NamedType':
                return $this->reduceNamedType($children);
            case 'BooleanValue':
                return $this->reduceBooleanValue($children);
            case 'EnumValue':
                return $this->reduceEnumValue($children);
            case 'ListValue':
                return $this->reduceListValue($children);
            case 'ListValues':
                return $this->reduceListValues($children);
            case 'NullValue':
                return $this->reduceNullValue($children);
            case 'IntValue':
                return $this->reduceIntValue($children);
            case 'FloatValue':
                return $this->reduceFloatValue($children);
            case 'ObjectValue':
                return $this->reduceObjectValue($children);
            case 'ObjectFields':
                return $this->reduceObjectFields($children);
            case 'ObjectField':
                return $this->reduceObjectField($children);
            case 'BlockStringValue':
                return $this->reduceBlockStringValue($children);
            case 'InlineStringValue':
                return $this->reduceInlineStringValue($children);
            case 'Variable':
                return $this->reduceVariable($children);
            case 'VariableName':
                return $this->reduceVariableName($children);
            case 'Description':
                return $this->reduceDescription($children);
            case 'SchemaDefinition':
                return $this->reduceSchemaDefinition($children);
            case 'OperationTypeDefinitions':
                return $this->reduceOperationTypeDefinitions($children);
            case 'OperationTypeDefinition':
                return $this->reduceOperationTypeDefinition($children);
            case 'DirectiveDefinition':
                return $this->reduceDirectiveDefinition($children);
            case 'DirectiveIsRepeatable':
                return $this->reduceDirectiveIsRepeatable($children);
            case 'DirectiveDefinitionBody':
                return $this->reduceDirectiveDefinitionBody($children);
            case 'FieldDefinitions':
                return $this->reduceFieldDefinitions($children);
            case 'FieldDefinition':
                return $this->reduceFieldDefinition($children);
            case 'InputValueDefinitions':
                return $this->reduceInputValueDefinitions($children);
            case 'InputValueDefinition':
                return $this->reduceInputValueDefinition($children);
            case 'EnumValueDefinitions':
                return $this->reduceEnumValueDefinitions($children);
            case 'EnumValueDefinition':
                return $this->reduceEnumValueDefinition($children);
            case 'EnumTypeDefinition':
                return $this->reduceEnumTypeDefinition($children);
            case 'InputObjectTypeDefinition':
                return $this->reduceInputObjectTypeDefinition($children);
            case 'InterfaceTypeDefinition':
                return $this->reduceInterfaceTypeDefinition($children);
            case 'ImplementsInterfaces':
                return $this->reduceImplementsInterfaces($children);
            case 'ObjectTypeDefinition':
                return $this->reduceObjectTypeDefinition($children);
            case 'ScalarTypeDefinition':
                return $this->reduceScalarTypeDefinition($children);
            case 'UnionTypeDefinition':
                return $this->reduceUnionTypeDefinition($children);
            case 'UnionTypeDefinitionTargets':
                return $this->reduceUnionTypeDefinitionTargets($children);
            case 'Directives':
                return $this->reduceDirectives($children);
            case 'Directive':
                return $this->reduceDirective($children);
            case 'Arguments':
                return $this->reduceArguments($children);
            case 'Argument':
                return $this->reduceArgument($children);
            case 'EnumTypeExtension':
                return $this->reduceEnumTypeExtension($children);
            case 'InputObjectTypeExtension':
                return $this->reduceInputObjectTypeExtension($children);
            case 'InterfaceTypeExtension':
                return $this->reduceInterfaceTypeExtension($children);
            case 'ObjectTypeExtension':
                return $this->reduceObjectTypeExtension($children);
            case 'ScalarTypeExtension':
                return $this->reduceScalarTypeExtension($children);
            case 'SchemaExtension':
                return $this->reduceSchemaExtension($children);
            case 'UnionTypeExtension':
                return $this->reduceUnionTypeExtension($children);
        }

        return null;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceIdentifier($children)
    {
        return new \Railt\SDL\Ast\Name\IdentifierNode($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceTypeName($children)
    {
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceListType($children)
    {
        return new \Railt\SDL\Ast\Type\ListTypeNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceNonNullType($children)
    {
        return new \Railt\SDL\Ast\Type\NonNullTypeNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceNamedType($children)
    {
        return new \Railt\SDL\Ast\Type\NamedTypeNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceBooleanValue($children)
    {
        return \Railt\SDL\Ast\Value\BooleanValueNode::parse($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceEnumValue($children)
    {
        $first = $children[0];

        switch (true) {
            case $first instanceof \Railt\SDL\Ast\Value\ValueNode:
            case $first instanceof \Railt\SDL\Ast\Name\IdentifierNode:
                return new \Railt\SDL\Ast\Value\EnumValueNode($first->value);

            default:
                throw new \InvalidArgumentException('Unrecognized Enum value type: ' . \gettype($first));
        }
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceListValue($children)
    {
        return new \Railt\SDL\Ast\Value\ListValueNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceListValues($children)
    {
        return new \Railt\SDL\Ast\Generic\ValueCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceNullValue($children)
    {
        return new \Railt\SDL\Ast\Value\NullValueNode();
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceIntValue($children)
    {
        return \Railt\SDL\Ast\Value\IntValueNode::parse($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceFloatValue($children)
    {
        return \Railt\SDL\Ast\Value\FloatValueNode::parse($children->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceObjectValue($children)
    {
        return new \Railt\SDL\Ast\Value\ObjectValueNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceObjectFields($children)
    {
        return new \Railt\SDL\Ast\Generic\ObjectFieldCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceObjectField($children)
    {
        return new \Railt\SDL\Ast\Value\ObjectFieldNode($children[0], $children[1]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceBlockStringValue($children)
    {
        return \Railt\SDL\Ast\Value\StringValueNode::parse($children[0]->getValue(), true);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceInlineStringValue($children)
    {
        return \Railt\SDL\Ast\Value\StringValueNode::parse($children[0]->getValue(), false);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceVariable($children)
    {
        return new \Railt\SDL\Ast\Value\VariableNode($children[0]);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceVariableName($children)
    {
        return new \Railt\SDL\Ast\Name\IdentifierNode($children[0]->getValue());
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceDescription($children)
    {
        return new \Railt\SDL\Ast\Description($children ?: null);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceSchemaDefinition($children)
    {
        $operations = \array_filter($children, static function ($child): bool {
            return $child instanceof \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection;
        });

        $schema = new \Railt\SDL\Ast\Definition\SchemaDefinitionNode(
            \reset($operations) ?: new \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection([])
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $schema->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $schema->directives = $child;
                    break;
            }
        }

        return $schema;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceOperationTypeDefinitions($children)
    {
        return new \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceOperationTypeDefinition($children)
    {
        return new \Railt\SDL\Ast\Definition\OperationTypeDefinitionNode(
            $children[0]->getValue(),
            $children[1]
        );
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceDirectiveDefinition($children)
    {
        $directive = new \Railt\SDL\Ast\Definition\DirectiveDefinitionNode(
            $children[1],
            \end($children)
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $directive->description = $child->value;
                    break;

                case \is_bool($child):
                    $directive->repeatable = true;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InputValueDefinitionCollection:
                    $directive->arguments = $child;
                    break;
            }
        }

        return $directive;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceDirectiveIsRepeatable($children)
    {
        return ! \is_array($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceDirectiveDefinitionBody($children)
    {
        return new \Railt\SDL\Ast\Generic\DirectiveLocationCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceFieldDefinitions($children)
    {
        return new \Railt\SDL\Ast\Generic\FieldDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceFieldDefinition($children)
    {
        $field = new \Railt\SDL\Ast\Definition\FieldDefinitionNode(
            $children[1],
            \Railt\SDL\Ast\Type\TypeNode::resolve($children)
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $field->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InputValueDefinitionCollection:
                    $field->arguments = $child;
                    break;
            }
        }

        return $field;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceInputValueDefinitions($children)
    {
        return new \Railt\SDL\Ast\Generic\InputValueDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceInputValueDefinition($children)
    {
        $value = new \Railt\SDL\Ast\Definition\InputValueDefinitionNode(
            $children[1],
            $children[2]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $value->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $value->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Value\ValueNode:
                    $value->defaultValue = $child;
                    break;
            }
        }

        return $value;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceEnumValueDefinitions($children)
    {
        return new \Railt\SDL\Ast\Generic\EnumValueDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceEnumValueDefinition($children)
    {
        $value = new \Railt\SDL\Ast\Definition\EnumValueDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $value->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $value->directives = $child;
                    break;
            }
        }

        return $value;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceEnumTypeDefinition($children)
    {
        $enum = new \Railt\SDL\Ast\Definition\EnumTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $enum->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $enum->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\EnumValueDefinitionCollection:
                    $enum->values = $child;
                    break;
            }
        }

        return $enum;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceInputObjectTypeDefinition($children)
    {
        $input = new \Railt\SDL\Ast\Definition\InputObjectTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $input->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $input->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InputValueDefinitionCollection:
                    $input->fields = $child;
                    break;
            }
        }

        return $input;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceInterfaceTypeDefinition($children)
    {
        $interface = new \Railt\SDL\Ast\Definition\InterfaceTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $interface->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $interface->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $interface->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InterfaceImplementsCollection:
                    $interface->interfaces = $child;
                    break;
            }
        }

        return $interface;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceImplementsInterfaces($children)
    {
        return new \Railt\SDL\Ast\Generic\InterfaceImplementsCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceObjectTypeDefinition($children)
    {
        $object = new \Railt\SDL\Ast\Definition\ObjectTypeDefinitionNode($children[1]);

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $object->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $object->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $object->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InterfaceImplementsCollection:
                    $object->interfaces = $child;
                    break;
            }
        }

        return $object;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceScalarTypeDefinition($children)
    {
        $scalar = new \Railt\SDL\Ast\Definition\ScalarTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $scalar->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $scalar->directives = $child;
                    break;
            }
        }

        return $scalar;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceUnionTypeDefinition($children)
    {
        $union = new \Railt\SDL\Ast\Definition\UnionTypeDefinitionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $union->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $union->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\TypeDefinitionCollection:
                    $union->types = $child;
                    break;
            }
        }

        return $union;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceUnionTypeDefinitionTargets($children)
    {
        return new \Railt\SDL\Ast\Generic\TypeDefinitionCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceDirectives($children)
    {
        return new \Railt\SDL\Ast\Generic\DirectiveCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceDirective($children)
    {
        $directive = new \Railt\SDL\Ast\Executable\DirectiveNode($children[0]);

        if (isset($children[1])) {
            $directive->arguments = $children[1];
        }

        return $directive;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceArguments($children)
    {
        return new \Railt\SDL\Ast\Generic\ArgumentCollection($children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceArgument($children)
    {
        return new \Railt\SDL\Ast\Executable\ArgumentNode(...$children);
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceEnumTypeExtension($children)
    {
        $enum = new \Railt\SDL\Ast\Extension\EnumTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $enum->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $enum->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\EnumValueDefinitionCollection:
                    $enum->values = $child;
                    break;
            }
        }

        return $enum;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceInputObjectTypeExtension($children)
    {
        $input = new \Railt\SDL\Ast\Extension\InputObjectTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $input->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $input->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InputValueDefinitionCollection:
                    $input->fields = $child;
                    break;
            }
        }

        return $input;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceInterfaceTypeExtension($children)
    {
        $interface = new \Railt\SDL\Ast\Extension\InterfaceTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $interface->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $interface->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $interface->directives = $child;
                    break;
            }
        }

        return $interface;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceObjectTypeExtension($children)
    {
        $object = new \Railt\SDL\Ast\Extension\ObjectTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $object->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\FieldDefinitionCollection:
                    $object->fields = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $object->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\InterfaceTypeDefinitionCollection:
                    $object->interfaces = $child;
                    break;
            }
        }

        return $object;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceScalarTypeExtension($children)
    {
        $scalar = new \Railt\SDL\Ast\Extension\ScalarTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $scalar->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $scalar->directives = $child;
                    break;
            }
        }

        return $scalar;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceSchemaExtension($children)
    {
        $schema = new \Railt\SDL\Ast\Extension\SchemaExtensionNode();

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $schema->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $schema->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\OperationTypeDefinitionCollection:
                    $schema->operationTypes = $child;
                    break;
            }
        }

        return $schema;
    }

    /**
     * @param NodeInterface|NodeInterface[]|TokenInterface|TokenInterface[] $children
     * @return NodeInterface|mixed
     * @throws \Throwable
     */
    protected function reduceUnionTypeExtension($children)
    {
        $union = new \Railt\SDL\Ast\Extension\UnionTypeExtensionNode(
            $children[1]
        );

        foreach ($children as $child) {
            switch (true) {
                case $child instanceof \Railt\SDL\Ast\Description:
                    $union->description = $child->value;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\DirectiveCollection:
                    $union->directives = $child;
                    break;

                case $child instanceof \Railt\SDL\Ast\Generic\TypeDefinitionCollection:
                    $union->types = $child;
                    break;
            }
        }

        return $union;
    }
}
