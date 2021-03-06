<?php

/*=======================================================================================
 *																						*
 *										Query.inc.php									*
 *																						*
 *======================================================================================*/
 
/**
 *	Query flags.
 *
 * This file contains the default query flags used to determine the result type of query
 * result.
 *
 * These values a bitfield value masked by the {@link kOPERATION_MASK}, in which the lower
 * bits, masked by the {@link kRESULT_MASK}, represent the desired result type and the
 * upper bit masked by {@link kOPERATION_ASSERT} indicates whether to assert object matches.
 *
 *	@author		Milko A. Škofič <m.skofic@cgiar.org>
 *	@version	1.00 06/03/2014
 */

/*=======================================================================================
 *	DEFAULT VALUES																		*
 *======================================================================================*/

/**
 * Default query.
 *
 * This bitfield value indicates an <em>object</em> result or <tt>NULL</tt> if there is no
 * match.
 */
define( "kQUERY_DEFAULT",				0x0 );

/*=======================================================================================
 *	DEFAULT MASKS																		*
 *======================================================================================*/

/**
 * Operator mask.
 *
 * This bitfield value represents the query mask.
 */
define( "kQUERY_MASK",					0x7 );

/**
 * Result mask.
 *
 * This bitfield value represents the result mask.
 */
define( "kRESULT_MASK",					0x3 );

/*=======================================================================================
 *	STATUS FLAGS																		*
 *======================================================================================*/

/**
 * Assert.
 *
 * This bitfield value indicates that if there is no match, an exception should be raised.
 */
define( "kQUERY_ASSERT",				0x4 );

/*=======================================================================================
 *	RESULT FLAGS																		*
 *======================================================================================*/

/**
 * Object.
 *
 * This bitfield value indicates that the result of the operation should be the object.
 *
 * This value should be masked with the {@link kRESULT_MASK}.
 */
define( "kQUERY_OBJECT",				0x0 );

/**
 * Array.
 *
 * This bitfield value indicates that the result of the operation should be the object
 * array.
 *
 * This value should be masked with the {@link kRESULT_MASK}.
 */
define( "kQUERY_ARRAY",					0x1 );

/**
 * Native identifier.
 *
 * This bitfield value indicates that the result of the operation should be the object
 * native identifier.
 */
define( "kQUERY_NID",					0x2 );

/**
 * Objects count.
 *
 * This bitfield value indicates that the result of the operation should be the objects
 * count.
 */
define( "kQUERY_COUNT",					0x3 );

/*=======================================================================================
 *	DEFAULT LIMITS																		*
 *======================================================================================*/

/**
 * Default start.
 *
 * This integer value indicates the default record start for a query.
 */
define( "kQUERY_START_DEFAULT",			0 );

/**
 * Default limit.
 *
 * This integer value indicates the default maximum number of records returned by a query,
 * this is relevant when aggregating results.
 */
define( "kQUERY_LIMIT_DEFAULT",			50 );

/**
 * Default language.
 *
 * This string value indicates the default language code for properties of type
 * {@link kTYPE_LANGUAGE_STRING} and {@link kTYPE_LANGUAGE_STRINGS}.
 */
define( "kQUERY_LANG_DEFAULT",			'en' );


?>
