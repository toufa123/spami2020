@if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
    <div class="text-muted ml-auto mr-auto">
      @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
      {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" rel="noopener" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
      @endif
      @if (config('backpack.base.show_powered_by'))
      {{ trans('backpack::base.powered_by') }} <a target="_blank" rel="noopener" href="http://spa-rac.org">UNEP-MAP-SPA/RAC</a>.
      @endif
    </div>
@endif
