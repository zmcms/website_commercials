<?php
namespace Zmcms\WebsiteCommercials\Backend\Middleware;
use Closure;use Session;use URL;class ZmcmsWebsiteCommercials
{
	public function handle($request, Closure $next){
		return $next($request);
	}
}
