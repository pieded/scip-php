<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: scip.proto

namespace GPBMetadata;

class Scip
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�

scip.protoscip"
Index 
metadata (2.scip.Metadata!
	documents (2.scip.Document1
external_symbols (2.scip.SymbolInformation"�
Metadata&
version (2.scip.ProtocolVersion!
	tool_info (2.scip.ToolInfo
project_root (	2
text_document_encoding (2.scip.TextEncoding"<
ToolInfo
name (	
version (	
	arguments (	"�
Document
language (	
relative_path (	%
occurrences (2.scip.Occurrence(
symbols (2.scip.SymbolInformation"_
Symbol
scheme (	
package (2.scip.Package%
descriptors (2.scip.Descriptor"9
Package
manager (	
name (	
version (	"�

Descriptor
name (	
disambiguator (	\'
suffix (2.scip.Descriptor.Suffix"�
Suffix
UnspecifiedSuffix 
	Namespace
Package
Type
Term

Method
TypeParameter
	Parameter
Meta	
Local	
Macro	"e
SymbolInformation
symbol (	
documentation (	)
relationships (2.scip.Relationship"�
Relationship
symbol (	
is_reference (
is_implementation (
is_type_definition (
is_definition ("�

Occurrence
range (
symbol (	
symbol_roles (
override_documentation (	%
syntax_kind (2.scip.SyntaxKind%
diagnostics (2.scip.Diagnostic"�

Diagnostic 
severity (2.scip.Severity
code (	
message (	
source (	!
tags (2.scip.DiagnosticTag*1
ProtocolVersion
UnspecifiedProtocolVersion *@
TextEncoding
UnspecifiedTextEncoding 
UTF8	
UTF16*}

SymbolRole
UnspecifiedSymbolRole 

Definition

Import
WriteAccess

ReadAccess
	Generated
Test *�

SyntaxKind
UnspecifiedSyntaxKind 
Comment
PunctuationDelimiter
PunctuationBracket
Keyword
IdentifierKeyword
IdentifierOperator

Identifier
IdentifierBuiltin
IdentifierNull
IdentifierConstant	
IdentifierMutableGlobal

IdentifierParameter
IdentifierLocal
IdentifierShadowed
IdentifierNamespace
IdentifierModule
IdentifierFunction 
IdentifierFunctionDefinition
IdentifierMacro
IdentifierMacroDefinition
IdentifierType
IdentifierBuiltinType
IdentifierAttribute
RegexEscape
RegexRepeated
RegexWildcard
RegexDelimiter
	RegexJoin
StringLiteral
StringLiteralEscape
StringLiteralSpecial
StringLiteralKey
CharacterLiteral
NumericLiteral 
BooleanLiteral!
Tag"
TagAttribute#
TagDelimiter$*V
Severity
UnspecifiedSeverity 	
Error
Warning
Information
Hint*N
DiagnosticTag
UnspecifiedDiagnosticTag 
Unnecessary

Deprecated*�
Language
UnspecifiedLanguage 
ABAP<
APL1
Ada\'
Agda-
AsciiDocV
Assembly:
AwkB
BatD

BibTeXQ
C"	
COBOL;
CPP#
CSS

CSharp
Clojure
Coffeescript

CommonLisp	
Coq/
Dart

Delphi9
DiffX

DockerfileP

Dyalog2

Elixir

Erlang

FSharp*
FishA
Flow
Fortran8

Git_Commit[

Git_ConfigY

Git_Rebase\\
Go!

Groovy
HTML
Hack

HandlebarsZ
Haskell,	
Idris.
IniH
J3
JSONK
Java

JavaScript
JavaScriptReact]
JsonnetL	
Julia7

Kotlin	
LaTeXS
Lean0
Less
Lua
MakefileO
MarkdownT

Matlab4
NixM	
OCaml)
Objective_C$
Objective_CPP%
PHP	
PLSQLF
Perl

PowerShellC

PrologG

Python
R6

Racket
Raku	
Razor>
ReSTU
Ruby
Rust(
SAS=
SCSS
SML+
SQLE
Sass	
Scala

Scheme

ShellScript@
SkylarkN	
Swift
TOMLI
TeXR

TypeScript
TypeScriptReact^
VisualBasic?
Vue
Wolfram5
XML
XSL 
YAMLJ
Zig&B/Z-github.com/sourcegraph/scip/bindings/go/scip/bproto3'
        , true);

        static::$is_initialized = true;
    }
}

