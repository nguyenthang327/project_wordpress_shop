jQuery(function ($) {
    'use strict';

	const top = window.top;
	top.Themify.LoadCss( builderWc.css, null );

    tb_app.Constructor['products_query'] = {
        render : function( data, self ) {
			/* migration routine: convert old options to new */
			if ( self.values['query_type'] ) {
				if ( self.values['query_type'] === 'tag' ) {
					self.values['query_type'] = 'product_tag';
					self.values['product_tag_terms'] = self.values['tag_products'];
				} else if ( self.values['query_type'] === 'category' ) {
					self.values['query_type'] = 'product_cat';
					self.values['product_cat_terms'] = self.values['category_products'];
				}
			}

			self.values['post_type'] = 'product';
			let result = self.create( [ {
				'type'    : 'query_posts',
				'id'      : 'post_type',
				'tax_id'  : 'query_type',
				'term_id' : '#tmp_id#_terms'
			} ] );

			return result;
		}
	}

    tb_app.Constructor['product_categories'] = {
        data:null,
        render:function(data,self){
            var wr = self.select.render({id:data.id},self),
                select = wr.querySelector('select'),
                _this = this,
                val = self.values[data.id]!==undefined?self.values[data.id]:'0',
                create = function(group,label,value){
                    var gr =document.createElement('optgroup'),
                        option = document.createElement('option');
                    gr.label=group;
                    option.textContent = label;
                    if(val===value){
                        option.selected=true;
                    }
                    option.value=value;
                    gr.appendChild(option);
                    return gr;
                },
                callback = function(){
                    var group =document.createElement('optgroup'),
                        f = document.createDocumentFragment();
                    group.label=builderWc.cat;
                    for(var i=0,len=_this.data.length;i<len;++i){
                        _this.data[i].selected=_this.data[i].value===val;
                        f.appendChild(_this.data[i]);
                    }
                    group.appendChild(f);
                    select.appendChild(group);
                };
                select.appendChild(create(builderWc.all,builderWc.all,'0'));
                select.appendChild(create(builderWc.top_level,builderWc.top_cat,'top-level'));
                if(this.data===null){
                   
                    $.ajax({
                        url:themifyBuilder.ajaxurl,
                        type: 'POST',
                        data: {
                            action: 'builder_wc_get_terms',
                            nonce: themifyBuilder.tb_load_nonce
                        },
                        success:function(res){
                            _this.data = Array.prototype.slice.call($(res)[0].children);
                            callback();
							select.querySelector('option[value="'+val+'"]').selected=true;
                        }
                    }); 
                }
                else{
                   callback();
                }
                return wr;
        }
    };
});