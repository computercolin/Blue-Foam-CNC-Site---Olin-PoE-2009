<?php include('./header.php') ?>
<div class="page-title">
        Mechanical System
</div>
<div class="main">
    <div class="item">
        <div class="invisible-date">
        </div>
        <img class="lone-image" src="img/mechanical/mech_isometric_730.jpg" />
    </div>
    
        <div class="item">
        <div class="date">
            <div></div>
            <span></span>
        </div>
        <div class="content">
            <h1>Overview</h1>
            <div class="body">
                <p>
		The system is designed to cut blue foam by moving a hot wire supported by two XY modules through a block of foam held in place by a clamping system.   The components were first designed and laid out in CAD and then either fabricated by team members or purchased.  A majority of the parts were machined out of aluminum or steel using the mill and lathes in the Olin machine shop.
        </p>
            </div>
        </div>
    </div>
    
    <div class="item">
        <div class="date">
            <div></div>
            <span></span>
        </div>
        <div class="content">
            <h1>X-axis</h1>
            <div class="body">
                <p>
		<a target="_blank" href="img/mechanical/xaxis_side_by_side_large.jpg"><img class="floatRight" src="img/mechanical/xaxis_side_by_side_small.jpg" /></a>
        The X axis is responsible for moving the Y axis in the x plane.&nbsp; The X  axis platform slides upon two 3/4&quot; aluminum rods and is driven by a  5/8-8 ACME threaded rod.&nbsp;</p>
        <p>
We chose 3/4&quot; aluminum rod  because our calculations showed that that would be sufficiently strong  (compared to our initial choice of 1/2&quot; rod). In hind sight, we should  have used either a fatter rod or stainless steel rod because although  the rods are strong enough to support the Y axis, they are not as rigid  as we would like.</p>
        <p> To minimize friction, the platform slides upon two plastic bushings on  one rods and slides on two parallel Teflon plates on the other rod.&nbsp; In  this way the rods are not over constrained, thus reducing the  possibility of binding.</p>
<p>
We chose to use ACME threaded rod over standard threaded rods because  although ACME rods are more expensive, they are designed to be used as  leadscrews and thus more efficient at transmitting torque.
              </p>
          </div>
      </div>
    </div>
    <div class="item">
        <div class="date">
            <div></div>
            <span></span>
        </div>
        <div class="content">
            <h1>Y-axis</h1>
            <div class="body">
                <p>
		<a target="_blank" href="img/mechanical/yaxis_side_by_side_large.jpg"><img class ="floatRight" src="img/mechanical/yaxis_side_by_side_small.jpg" /></a>
		Each y-module sits on an x-axis and is independent of the other y-module.  Its main components are a 24" drawer slide, two aluminum support bars, and a motor-gearbox assembly.  The drawer slides were chosen because they provide a low-friction surface for sliding vertically and because they have many pre-drilled holes for quick mounting of additional parts.  The drawer slide is connected by a nut to an ACME threaded rod, which is turned by a motor and gearbox assembly (identical to those on the x-axis).  The aluminum bars support the y-axis drawer slide both parallel and perpendicular to the direction of the hot wire.  This allows the y-axis to support the loads caused by the tension of the wire as it presses into the foam.  Additionally, they hold the drawer slide rigidly in place, which makes it possible to accurately control the position of the wire.</p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="date">
            <div></div>
            <span></span>
        </div>
        <div class="content">
            <h1>Gearbox</h1>
            <div class="body">
                <p>
                <a target="_blank" href="img/mechanical/gearbox_side_by_side_large.jpg"><img class="floatLeft" src="img/mechanical/gearbox_side_by_side_small.jpg"/></a>
                The free speed of the motors is 2,200 RPM and the stall torque of the motors is 0.042Nm.  Additionally, our experimental results showed that we need 1N of force per module to cut foam at about .3in/s.  This meant that the motors needed to be substantially geared down in order for the motors to be useful in our application.  The fact that we are using a threaded rod to convert rotary motion into linear motion provides some speed reduction (8 revolutions per inch), but this reduction was not enough.  Thus, we designed a two stage gearbox to provide a predicted force of 1.1N at a linear speed of 0.3in/s and at 53% of the motor's stall current.  This calculation assumed that the gears were 100% efficient and the threaded rod was 20% efficient.
</p><p>
In order to keep costs down in the gearbox, we bought gear stock from SDP-SI to cut up into individual gears and designed it such that we only needed to buy two gear sizes.  We also designed the gear box to use bushings rather than bearings because bushings are substantially cheaper and the loads on our gearboxes are relatively low.
</p><p>
One worry during the design phase was that since we did not know the force that it would take to move a module, we might end up with gearboxes that were not powerful enough.  Fortunately, our reduction ended up being sufficient.  With no load, we observed one of the X axises to be moving at a rate of .6in/s.  This is almost as fast as the theoretical linear free speed (ie no load) of .64in/s and according to our prediction model, indicates that the motor is exerting a force of 0.13N in order to move the X axis.  This indicates that either our efficiency estimate for the leadscrew was way low or the data we have for the motor underestimates the motor's power.  Either way, we got lucky on this one.  In the future, we would do a more thorough analysis of the friction and forces involved and make sure that we have correct motor data.
        </p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="date">
            <div></div>
            <span></span>
        </div>
        <div class="content">
            <h1>Hot Wire</h1>
            <div class="body">
                <p>
                <a target="_blank" href="img/mechanical/wire_attachment_large.jpg"><img class ="floatRight" src="img/mechanical/wire_attachment_small.jpg" /></a>
                A hot wire tensioned between the two y-modules is the cutting mechanism in our device.  Each end of the wire is attached to the moving part of the drawer slide by an electrically insulating plastic ring and a spring.  The springs protect the wire from being over-tensioned, as they are much more apt to stretch than the wire itself.  The plastic ring prevents the user from being electrocuted by the 12 volt potential difference between the two ends of the wire.</p>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="date">
            <div></div>
            <span></span>
        </div>
        <div class="content">
            <h1>Clamping System</h1>
            <div class="body">
                <p>
                <a target="_blank" href="img/mechanical/clamping_side_by_side_large.jpg"><img class="floatRight" src="img/mechanical/clamping_side_by_side_small.jpg" /></a>
                The clamping system is based around two off-the-shelf bar clamps and parallel pieces of wood. These bar clamps can make large and small adjustments in the jaw width, allowing us to accommodate large pieces of foam and to clamp the foam securely.  The wooden bars distribute the load from the clamps over a large area of foam, so that the foam is not dented or deformed by the clamps.  The clamps are spaced sufficiently far apart to accommodate  large pieces of foam.  The entire system is held up on 2x4's above the level of the plywood in order to elevate the foam above the lower limit of the y-axis drawer slide's range of motion.</p>
            </div>
        </div>
    </div>
</div>
<?php include('./footer.php') ?>
