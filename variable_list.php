/* All variables are represented by one structure, zval: */
typedef struct _zval_struct {
	zvalue_value value; /* variable value */
	zend_uint refcount_gc; /* reference counter */
	zend_uchar type; /* value type */
	zend_ucar is_ref_gc; /* reference flag */
} zval;

